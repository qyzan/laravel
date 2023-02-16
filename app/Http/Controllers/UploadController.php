<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $uploads = Upload::with('user')->get();
        #$upload = Upload::all();
        $title = 'Document';
        return view('upload.index',compact('title','upload'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Document";
        return view('upload.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Please fill in all the fields',
            'date' => 'Date column must be complete',
            'numeric' => 'Column must be filled with numbers',
            'file'=> 'Incorrect file extension'
        ];
        $validasi = $request->validate([
            'nama' => 'required|unique:uploads|max:50',
            'tag' => 'required',
            'deskripsi' => 'required',
            'file'=> 'mimetypes:application/pdf,application/vnd.ms-word.document.macroenabled.12|max:512'
        ],$message);
        $validasi['user_id'] = Auth::id();
        
        #$fileName = time() . $request->file('file')->getClientOriginalName();
        #$path = $request->file('file')->store('files',$fileName);
        #$validasi['file'] = $path;

        $fileName = $request->file('file');
        if ( $fileName != NULL) {
            $fileName = time().$request->file('file')->getClientOriginalName();
            $path= $request ->file('file')->storeAs('files', $fileName);
            $validasi['file'] = $path;
        }else{
            unset($validasi['file']);
        }

        Upload::create($validasi);
        return redirect('upload')->with('Succes', 'Document saved successfully');
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
        $edit = Upload::find($id);
        $title = 'Edit Document';
        return view('upload.edit',compact('title','edit'));
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
        $message = [
            'required' => 'Please fill in all the fields',
            'date' => 'Date column must be complete',
            'numeric' => 'Column must be filled with numbers',
            'file'=> 'Incorrect file extension'
        ];
        $validasi = $request->validate([
            'nama' => 'required|max:50',
            'tag' => 'required',
            'deskripsi' => 'required',
            'file'=> 'mimetypes:application/pdf,application/vnd.ms-word.document.macroenabled.12|max:512'
        ],$message);
        if($request -> hasFile('file')){
            $fileName = time().$request->file('file')->getClientOriginalName();
            if ( $fileName != NULL) {
                $path= $request ->file('file')->storeAs('files', $fileName);
                $validasi['file'] = $path;
                $upload = Upload::find($id);
                Storage::delete($upload->file);
            }else{
                unset($validasi['file']);
                }
            }

        Upload::where('id',$id)->update($validasi);
        $validasi['user_id'] = Auth::id();
        return redirect('upload')->with('Succes', 'Document update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upload = Upload::find($id);
        if($upload != NULL){
            Storage::delete($upload->file);
            Upload::where('id',$id)->delete();
        }
        return redirect('upload')->with('Succes', 'Document delete successfully');
    }
}
