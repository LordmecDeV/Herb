<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function allUser(Request $request)
    {

        if(Gate::allows(ability:'colaborador-view')){
        $qtd = $request['qtd'] ?: 8;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($buscar){
            $verTodos = DB::table('users')->where('name', '=', $buscar)->paginate($qtd);
        }else{
            $verTodos = DB::table('users')->paginate($qtd);
        }

        
        
        return view('user.allUsers', compact('verTodos'));
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }
    

    public function delete($id){
        if(Gate::allows(ability:'colaborador-view')){
        $deletarDados = User::find($id);
        return view('user.delete', compact('deletarDados'));
        }else{
            abort(code: 403, message: 'Access denied');
        }
        }
        
        public function destroy($id){
            if(Gate::allows(ability:'colaborador-view')){
            User::find($id)->delete();
            return redirect()->route('all');
        }else{
            abort(code: 403, message: 'Access denied');
        }
        }

    public function store(Request $request)
    {
        if(Gate::allows(ability:'colaborador-view')){
          User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'cargo' => $request['cargo']
          ]);
          return redirect()->route('all');
        }else{
            abort(code: 403, message: 'Access denied');
        }
    
    }
            
    public function criarUsuario(){
        if(Gate::allows(ability:'colaborador-view')){
        return view('user.create');
    }else{
        abort(code: 403, message: 'Access denied');
    }
    }
    

}