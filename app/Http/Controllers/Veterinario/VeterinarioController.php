<?php

namespace App\Http\Controllers\Veterinario;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\historiaClinica;

class VeterinarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.veterinario');
    }
    public function veterinarioDashboard(){

return view("vet_views.inicio");
    }
    public function formularioHistoriasVet(){
        $ultimoId = historiaClinica::latest('id')->value('id');
        $idFinal=$ultimoId+1;
        return view("vet_views.formulario_vet",['id'=>$idFinal]);
    }
    public function storeHistoriaClinicaVet(Request $request){
        $request->validate([
            'nombre_mascota'=>'required|string|max:250',
            'sexo_mascota'=>'required|string|max:250',
            'peso_mascota'=>'required|string|max:250',
            'especie'=>'required|string|max:250',
            'edad_mascota'=>'required|string|max:250',
            'esterilizado'=>'required|string|max:250',
            'raza'=>'required|string|max:250',
            'color_mascota'=>'required|string|max:250',
            'medicina_preventiva'=>'required|string|max:250',
            'nombre_owner'=>'required|string|max:250',
            'telefono'=>'required|string|max:15',
            'direccion'=>'required|string|max:250',
            'fc'=>'required|string|max:50',
            'fr'=>'required|string|max:50',
            'temperatura'=>'required|string|max:50',
            'llenado_capilar'=>'required|string|max:250',
            'pulso'=>'required|string|max:250',
            'diagnostico_diferencial'=>'required|string|max:250',
            'diagnostico_final'=>'required|string|max:250',
            'pruebas_de_laboratorio'=>'required|string|max:250',
            'tratamiento'=>'required|string|max:250',
        
        ]);
        historiaClinica::create([
            'nombre_mascota'=> $request->nombre_mascota,
            'sexo_mascota'=> $request->sexo_mascota,
            'peso_mascota'=> $request->peso_mascota,
            'especie_mascota'=> $request->especie,
            'edad_mascota'=> $request->edad_mascota,
            'esterilizar_mascota'=> $request->esterilizado,
            'raza_mascota'=> $request->raza,
            'color_mascota'=> $request->color_mascota,
            'medicina_preventiva'=> $request->medicina_preventiva,
            'nombre_dueño'=> $request->nombre_owner,
            'telefono_dueño'=> $request->telefono,
            'direccion_dueño'=> $request->direccion,
            'fc'=> $request->fc,
            'fr'=> $request->fr,
            'temperatura'=> $request->temperatura,
            'llenado_capilar'=> $request->llenado_capilar,
            'pulso'=> $request->pulso,
            'diagnostico_diferencial'=> $request->diagnostico_diferencial,
            'diagnostico_final'=> $request->diagnostico_final,
            'test_laboratorio'=> $request->pruebas_de_laboratorio,
            'tratamiento'=> $request->tratamiento,
        ]);return redirect()->route('historiasClinicasFormulario.veterinario')->withSuccess('Datos almacenados correctamente!');
    }
    public function crudHistoriasVet(){
        return view("vet_views.crud_historias",['historia'=>historiaClinica::all()]);
        }
        public function deleteHistoriaVet(Request $request){
            $request->validate([
                'id' => 'required|integer|max:100',
            ]);
            $id = $request->input('id');
            
            $historia = historiaClinica::find($id);
            
            $historia->delete();
            return redirect()->route('listaHistorias.vet')->withSuccess('Historia eliminada correctamente!');
        }
        public function editarHistoriaVet($id){
            $historia= historiaClinica::find($id);
            if (!$historia) {
                return redirect()->back()->withErrors("La historia no existe");
            }      
            return view("vet_views.editar_historia",['historia' => $historia]);
        }
        public function updateHistoriaVet(request $request){
            $id = $request->input('id');
            $historia = historiaClinica::find($id);
            $historia->nombre_mascota = $request->input('nombre_mascota');
            $historia->sexo_mascota = $request->input('sexo_mascota');
            $historia->peso_mascota = $request->input('peso_mascota');
            $historia->especie_mascota = $request->input('especie');
            $historia->edad_mascota = $request->input('edad_mascota');
            $historia->esterilizar_mascota = $request->input('esterilizado');
            $historia->raza_mascota = $request->input('raza');
            $historia->color_mascota = $request->input('color_mascota');
            $historia->medicina_preventiva = $request->input('medicina_preventiva');
            $historia->nombre_dueño = $request->input('nombre_owner');
            $historia->telefono_dueño = $request->input('telefono');
            $historia->direccion_dueño = $request->input('direccion');
            $historia->fc = $request->input('fc');
            $historia->fr = $request->input('fr');
            $historia->temperatura = $request->input('temperatura');
            $historia->llenado_capilar = $request->input('llenado_capilar');
            $historia->pulso = $request->input('pulso');
            $historia->diagnostico_diferencial = $request->input('diagnostico_diferencial');
            $historia->diagnostico_final = $request->input('diagnostico_final');
            $historia->test_laboratorio = $request->input('pruebas_de_laboratorio');
            $historia->tratamiento = $request->input('tratamiento');
        
            $historia->save();
            return redirect()->route('listaHistorias.vet')->withSuccess("Los datos se han modificado correctamente!");
            ;
        }
        public function verHistoriaVet($id){
            $historia= historiaClinica::find($id);
            if (!$historia) {
                return redirect()->back()->withErrors("La historia no existe");
            }  return view('vet_views.ver_historia',['historia' => $historia]);
        
        }
}
