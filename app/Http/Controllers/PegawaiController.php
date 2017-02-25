<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\pegawai;
use App\golongan;
use App\jabatan;
use Validator;
use Input;
use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use RegistersUsers;
    

   public function index()
    {
        //
        $pegawai = pegawai::with('User','jabatan','golongan')->get();
        return view('pegawai.index',compact('pegawai'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pegawai = pegawai::all();
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        return view('pegawai.create',compact('pegawai','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
        $this->validate($request,[
            'name' => 'required|max:255',
            'nip' => 'required|min:3|numeric|unique:pegawais',
=======
        $rules = [  'name' => 'required|max:255',
            'nip'  => 'required|numeric|min:3|unique:pegawais',
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
<<<<<<< HEAD
            'permission' => 'required|max:255',
        ]);
=======
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'photo' => 'required'];
        $sms = ['nip.required' => 'Harus Diisi',
                'nip.unique' => 'Data Sudah Ada',
                'nip.numeric' => 'Harus Angka',
                'email.required' => 'Harus Diisi',
                'email.unique' => 'Data Sudah Ada',
                'jabatan_id.required' => 'Harus Diisi',
                'golongan_id.required' => 'Harus Diisi',
                'photo.required' => 'Harus Diisi',
                'email.email' => 'Harus Format Email',
                'name.required' => 'Harus Diisi',
                'password.min' => 'Sandi harus minimal 6 karakter',
                'nip.min' => 'nip harus minimal 3.',
                ];
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

            alert()->error('Data Salah');  
            return redirect('pegawai/create')
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        alert()->success('Data Tersimpan');
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);
        $file = Input::file('photo');
        $dis = public_path().'/assets';
        $filen = str_random(6).'_'.$file->getClientOriginalName();
        $upload = $file->move($dis,$filen);
        if(Input::hasFile('photo'))
        {
            $pegawai=new pegawai;
            $pegawai->nip = Input::get('nip');
            $pegawai->jabatan_id = Input::get('jabatan_id');
            $pegawai->golongan_id = Input::get('golongan_id');    
        }
        $pegawai->photo=$filen;
        $pegawai->user_id = $user->id;
        
        $pegawai->save();
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        //
        //$pegawai=pegawai::with('User')->find($id);
        $pegawai=pegawai::find($id);
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $user = User::all();
        return view('pegawai.edit',compact('pegawai','jabatan','golongan','user'));
=======
      
       $golongan=golongan::all();
       $jabatan=jabatan::all(); 
       $pegawai=pegawai::find($id);
       $user=User::all();
       return view('pegawai.edit',compact('golongan','jabatan','pegawai','user'));
     
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        //
        // $pegawai1 = pegawai::where('id',$id)->first();
        // $user1 = User::where('id',$id)->first();
        // if ($pegawai1['nip'] != request('nip'))
        // {   
        //     $this->validate($request,[
        //     'name' => 'required|max:255',
        //     'nip' => 'required|min:3|numeric|unique:pegawais',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        //     'permission' => 'required|max:255',
        //     ]);
        // }
        // else
        // {
        //     $this->validate($request,[
        //     'name' => 'required|max:255',
        //     'nip' => 'required|min:3|numeric',
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|min:6|confirmed',
        //     'permission' => 'required|max:255',
        // ]);
        // }
        // $file = Input::file('photo');
        // $dis = public_path().'/assets';
        // $filen = str_random(6).'_'.$file->getClientOriginalName();
        // $upload = $file->move($dis,$filen);
        // if(Input::hasFile('photo'))
        // {
        //     $pegawai=pegawai::find($id);
        //     $pegawai->nip = Input::get('nip');
        //     $pegawai->jabatan_id = Input::get('jabatan_id');
        //     $pegawai->golongan_id = Input::get('golongan_id');
        //     $user=User::find($id);
        //     $user->name = Input::get('name');
        //     $user->permission = Input::get('permission');    
        // }
        // $pegawai->photo=$filen;
        // $pegawai->user_id = $user->id;
        
        // $pegawai->update();
        // return redirect('pegawai');
        $pegawai1 = pegawai::where('id',$id)->first();
        if ($pegawai1['nip'] != request('nip'))
        {
            $rules=['nip'=>'required|unique:pegawais',
                'jabatan_id'=>'required',
                'golongan_id'=>'required',
                'photo' => 'required'];
            $sms=['nip.required'=>'Data tidak boleh kosong',
                'nip.unique'=>'Data tidak boleh sama',
                'jabatan_id.required'=>'Data tidak boleh kosong',
                'golongan_id.required'=>'Data tidak boleh kosong',
                'photo.required'=>'Data tidak boleh kosong',
                ];
        }
        else
        {
            $rules=['nip'=>'required',
                'jabatan_id'=>'required',
                'golongan_id'=>'required',
                'photo' => 'required'];
            $sms=['nip.required'=>'Data tidak boleh kosong',
                'nip.unique'=>'Data tidak boleh sama',
                'jabatan_id.required'=>'Data tidak boleh kosong',
                'golongan_id.required'=>'Data tidak boleh kosong',
                'photo.required'=>'Data tidak boleh kosong',
                ];
        }
        $valid=Validator::make(Input::all(),$rules,$sms);
        if ($valid->fails()) {

             
            return redirect()->back()
            ->withErrors($valid)
            ->withInput();
        }
        else
        {
        $file = Input::file('photo');
        $dis = public_path().'/assets';
        $filen = str_random(6).'_'.$file->getClientOriginalName();
        $upload = $file->move($dis,$filen);
        if(Input::hasFile('photo'))
        {
            
            
            $pegawai = pegawai::find($id);
            $pegawai->nip = Input::get('nip');
            $pegawai->jabatan_id = Input::get('jabatan_id');
            $pegawai->golongan_id = Input::get('golongan_id');

            
        
            
            
        }
        $user=User::all();
        $pegawai->photo=$filen;
        $pegawai->user_id = $pegawai->User->id;
        $pegawai->update();
        // $pegawai->update();

        return redirect('/pegawai');
        }
=======
       
        $file = Input::file('photo');
        $destinationPath = public_path().'/assets/image/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        {
        if(Input::hasFile('photo'))
            $pegawai =pegawai::find('id');
            $pegawai->nip =$request->get('nip');
            $pegawai->jabatan_id =$request->get('jabatan_id');
            $pegawai->golongan_id =$request->get('golongan_id');
        } 
            $user=User::all();
           // $pegawai->user_id = $user->id;
            $pegawai->photo = $filename;
            $pegawai->update();
               
            return redirect('/pegawai');
         
>>>>>>> 715ea6955697cfd909e760221a9806559fbc8aa3
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        pegawai::find($id)->delete();
        alert()->success('Data Terhapus');
        return redirect('pegawai');
    }
}
