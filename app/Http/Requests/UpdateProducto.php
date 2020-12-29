<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre' => 'required',
            'PrecioCompra' => 'required|numeric',
            'PrecioPublico' => 'required|numeric',
            'CodigoBarra' => 'required_without_all:check',
            'DescripcionCorta' => 'required|max:217',
            'DescripcionLarga' => 'required',
            'Foto1' => 'image|max:2048|',
            'Foto2' => 'image|max:2048',
            'Foto3' => 'image|max:2048',
            'Foto4' => 'image|max:2048',

            'Titulo1' => 'required_with:Foto1',
            'TextoAlterno1' => 'required_with:Foto1',
            'Titulo1' => 'required_without:hayFoto1',
            'TextoAlterno1' => 'required_without:hayFoto1',

            'Titulo2' => 'required_with:Foto2',
            'TextoAlterno2' => 'required_with:Foto2',
            'Titulo2' => 'required_without:hayFoto2',
            'TextoAlterno2' => 'required_without:hayFoto2',

            'Titulo3' => 'required_with:Foto3',
            'TextoAlterno3' => 'required_with:Foto3',
            'Titulo3' => 'required_without:hayFoto3',
            'TextoAlterno3' => 'required_without:hayFoto3',

            'Titulo4' => 'required_with:Foto4',
            'TextoAlterno4' => 'required_with:Foto4',
            'Titulo4' => 'required_without:hayFoto4',
            'TextoAlterno4' => 'required_without:hayFoto4',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El :attribute es requerido',
            'PrecioCompra.required' => 'El precio de compra es requerido',
            'PrecioCompra.numeric' => 'El precio de compra debe ser numerico',
            'PrecioPublico.required' => 'El precio publico es requerido',
            'PrecioPublico.numeric' => 'El precio publico debe ser numerico',
            'CodigoBarra.required_without_all' => 'Debe escribir el codigo de barra',
            'DescripcionCorta.required' => 'La descripcion corta es requerido',
            'DescripcionCorta.max' => 'Maximo 217 caracteres',
            'DescripcionLarga.required' => 'El descripcion larga es requerido',

            'Foto1.image' => 'Debe agregar una imagen',
            'Foto1.max' => 'El tamaño en GB supera lo permitido',
            'Foto2.image' => 'Debe agregar una imagen',
            'Foto2.max' => 'El tamaño en GB supera lo permitido',
            'Foto3.image' => 'Debe agregar una imagen',
            'Foto3.max' => 'El tamaño en GB supera lo permitido',
            'Foto4.image' => 'Debe agregar una imagen',
            'Foto4.max' => 'El tamaño en GB supera lo permitido',

            'Titulo1.required_with' => 'El titulo es requerido',
            'TextoAlterno1.required_with' => 'El texto alternado es requerido',
            'Titulo1.required_without' => 'El titulo es requerido',
            'TextoAlterno1.required_without' => 'El texto alternado es requerido',
            
            'Titulo2.required_with' => 'El titulo es requerido',
            'TextoAlterno2.required_with' => 'El texto alternado es requerido',
            'Titulo2.required_without' => 'El titulo es requerido',
            'TextoAlterno2.required_without' => 'El texto alternado es requerido',

            'Titulo3.required_with' => 'El titulo es requerido',
            'TextoAlterno3.required_with' => 'El texto alternado es requerido',
            'Titulo3.required_without' => 'El titulo es requerido',
            'TextoAlterno3.required_without' => 'El texto alternado es requerido',

            'Titulo4.required_with' => 'El titulo es requerido',
            'TextoAlterno4.required_with' => 'El texto alternado es requerido',
            'Titulo4.required_without' => 'El titulo es requerido',
            'TextoAlterno4.required_without' => 'El texto alternado es requerido',
        ];
    }
}
