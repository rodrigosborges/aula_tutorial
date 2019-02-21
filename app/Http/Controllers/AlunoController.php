<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aluno;
use App\Endereco;
use DB;

class AlunoController extends Controller{

    public function index(Request $request){
        $data = [
			'alunos'	=> Aluno::all(),
			'title'		=> "Lista de alunos",
		]; 
			
	    return view('aluno.index', compact('data'));
    }
    
	public function create(Request $request){
		$data = [
			"url" 	 	=> url('aluno'),
			"button" 	=> "Salvar",
			"model"		=> null,
			'title'		=> "Cadastrar aluno"
		];
	    return view('aluno.form', compact('data'));
	}

	public function store(Request $request){
		$aluno = Aluno::Create($request->all());
		$aluno->endereco()->create($request->all());
		return redirect('/aluno');
    }
    
	public function edit(Request $request, $id){
		$data = [
			"url" 	 	=> url("aluno/$id"),
			"button" 	=> "Atualizar",
			"model"		=> Aluno::findOrFail($id),
			'title'		=> "Atualizar aluno"
		];
	    return view('aluno.form', compact('data'));
	}
	
	public function update(Request $request, $id) {
		$aluno = Aluno::findOrFail($id);
		$aluno->update($request->all());
		$aluno->endereco->update($request->all());
	    return redirect('/aluno');
    }
    
	public function show(Request $request, $id){
		$aluno = Aluno::findOrFail($id);
	    return view('aluno.show', [
            'model' => $aluno	    
        ]);
    }
    
	public function destroy(Request $request, $id) {
		$aluno = Aluno::findOrFail($id);
		$aluno->delete();
		return back();    
	}
	
}