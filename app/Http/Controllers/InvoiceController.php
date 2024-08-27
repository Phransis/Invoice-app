<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function create(){
        return view("invoices.create");
    }

    public function store(Request $request){
        $invoice = Invoice::create([
            'user_id' => auth()->id(),
            'invoice_number' => $request->invoice_number,
            'type'=> $request->type,
        ]);

        foreach ($request->items as $item){
            $invoice->items()->create($item);
        }

        return redirect()->route('invoices.index')->with('success','Invoice created successfull!');
    }

    public function index(){
        $invoices = Invoice::where('user_id', auth()->id())->get();
        return view('invoices.index', compact('invoices'));
    }
}
