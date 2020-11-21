<?php

namespace App\ViewModel;
use App\Models\Consulta;
use App\Models\AparatoSistema;
use App\Models\Paciente;
use App\Models\SintomaSubjetivo;
class ConsultaViewModel
{
    public function crearConsulta($consultaData)
    {
        $cita = $consultaData->except('_token');
        if(session()->has('IdConsulta'))
        {
            $IdConsultaSession = session('IdConsulta');
            $consultaExistente = Consulta::find($IdConsultaSession);
            if(is_null($consultaExistente)){
                $citaCreada = Consulta::create($cita);
                session()->forget('IdConsulta');
                session(['IdConsulta' => $citaCreada->id]);
                return $citaCreada;
            }
            return $consultaExistente;
        }else{
            session()->forget('IdConsulta');
            $citaCreada = Consulta::create($cita);
            session(['IdConsulta' => $citaCreada->id]);
            return $citaCreada;
        }
        
    }
    public function guardarConsultaAparatosSistemas($consultaData)
    {
        $AparatoSistema = new AparatoSistema;
        $AparatoSistema->IdConsulta = $consultaData->IdConsulta;
        $AparatoSistema->Cabeza = $consultaData->Cabeza;
        $AparatoSistema->Cuello = $consultaData->Cuello;
        $AparatoSistema->Tronco = $consultaData->Tronco;
        $AparatoSistema->Pelvis = $consultaData->Pelvis;
        $AparatoSistema->MiembroInferior = $consultaData->MiembroInferior;
        $AparatoSistema->MiembroSuperior = $consultaData->MiembroSuperior;
        $AparatoSistema->Cabello = $consultaData->Cabello;
        $AparatoSistema->Dientes = $consultaData->Dientes;
        $AparatoSistema->Lengua = $consultaData->Lengua;
        $AparatoSistema->Pulso = $consultaData->Pulso;
        $AparatoSistema->save();
        return $AparatoSistema;
    }

    public function updateAparatosSistemas($consultaData){
        $AparatoSistema = AparatoSistema::find($consultaData->id);
        $AparatoSistema->Cabeza = $consultaData->Cabeza;
        $AparatoSistema->Cuello = $consultaData->Cuello;
        $AparatoSistema->Tronco = $consultaData->Tronco;
        $AparatoSistema->Pelvis = $consultaData->Pelvis;
        $AparatoSistema->MiembroInferior = $consultaData->MiembroInferior;
        $AparatoSistema->MiembroSuperior = $consultaData->MiembroSuperior;
        $AparatoSistema->Cabello = $consultaData->Cabello;
        $AparatoSistema->Dientes = $consultaData->Dientes;
        $AparatoSistema->Lengua = $consultaData->Lengua;
        $AparatoSistema->Pulso = $consultaData->Pulso;
        $AparatoSistema->save();
        return $AparatoSistema;
    }
    public function getAparatosSistemasXId($IdConsulta){
        $aparatosSistemas = AparatoSistema::where('IdConsulta',$IdConsulta)->first();
        return $aparatosSistemas;
    }

    public function getSintomasSubjetivosXId($IdConsulta){
        $SintomaSubjetivo = SintomaSubjetivo::where('IdConsulta',$IdConsulta)->get();
        return $SintomaSubjetivo;
    }
    public function guardarSintomasSubjetivos($consultaData){
        $cita = $consultaData->except('_token');
        $SintomaSubjetivo = SintomaSubjetivo::create($cita);
        return $cita;
    }

    public function updateSintomasSubjetivos($consultaData)
    {
        $SintomaSubjetivo = SintomaSubjetivo::find($consultaData->IdSintoma);
        $SintomaSubjetivo->Nombre = $consultaData->Nombre;
        $SintomaSubjetivo->Descripcion = $consultaData->Descripcion;
        $SintomaSubjetivo->save();
        return $SintomaSubjetivo;
    }
    public function deleteSintomasSubjetivos($IdSintomasSubjetivos)
    {
        $SintomaSubjetivo = SintomaSubjetivo::find($IdSintomasSubjetivos);
        $SintomaSubjetivo->delete();
        return $SintomaSubjetivo;
    }
    public function getIdpaciente($IdConsulta) {
        $consulta = Consulta::find($IdConsulta);
        return $consulta->IdPaciente;
    }

    public function getPaciente($Idpaciente)
    {
        $paciente = Paciente::find($Idpaciente);
        return $paciente;
    }

    public function getPacienteXConsulta($IdConsulta)
    {
        $consulta = Consulta::find($IdConsulta);
        $paciente = Paciente::find($consulta->IdPaciente);
        return $paciente;
    }
}