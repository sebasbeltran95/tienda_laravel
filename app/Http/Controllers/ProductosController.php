<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index(){
        
        $ventas = Productos::get();
        return view('home', compact('ventas'));
    }
    
    public function store(Request $request)
    {
        $date     = date("YmdHis");

        $registro = new  Productos();
        $registro->cod_prod         =$request->cod_prod;
        $registro->cliente          =$request->cliente;
        $registro->producto          =$request->producto;
        $registro->total            =$request->total;
        $registro->fecha_compra     =$date;

        $registro->save();
        return redirect()->route('productos');
        
    }

    public function filtro(Request $request){
        $ventas = Productos::whereBetween('fecha_compra', [$request->desde, $request->hasta])
        ->orderby('fecha_compra', 'DESC')
        ->get();
        return view('home', compact('ventas'));

    }

    public function filtro_producto(Request $request){
        $ventas = Productos::where('cod_prod', $request->cod_prod)
        ->get();
        return view('home', compact('ventas'));

    }

    public function update(Request $request){
        // $registro=Productos::where('id',$id)->get();
        $registro = Productos::find($request->id);

        $registro->cod_prod = $request->cod_prod;
        $registro->cliente = $request->cliente;
        $registro->producto = $request->producto;
        $registro->total = $request->total;

        $registro->save();

        return back();
    }

    public function destroy($id){
        $venta=Productos::where('id',$id)->first();
        $venta->delete();
        return redirect()->route('productos');
    }
}
