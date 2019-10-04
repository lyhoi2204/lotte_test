<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->only([
           'from_date',
           'to_date',
        ]);

        if(empty($inputs['from_date']) || empty($inputs['to_date'])) {
            $inputs['from_date']    = Carbon::now()->format('Y-m-01');
            $inputs['to_date']      = Carbon::now()->format('Y-m-d');
        }

        $inventories = DB::select("
            SELECT 
                i.product_id,
                SUM(
                    CASE WHEN i.type = :typeimport1 THEN i.quantity ELSE 0 END
                ) AS import,
                SUM(
                    CASE WHEN i.type = :typeexport1 THEN i.quantity ELSE 0 END
                ) AS export,
                (
                  SELECT COALESCE(SUM(quantity), 0) FROM inventories AS i1 
                    WHERE i1.product_id = i.product_id
                    AND i1.type = :typeimport2
                    AND DATE(i1.updated_date) < :fromdate1
                ) 
                -
                (
                  SELECT COALESCE(SUM(quantity), 0) FROM inventories AS i2 
                    WHERE i2.product_id = i.product_id
                    AND i2.type = :typeexport2
                    AND DATE(i2.updated_date) < :fromdate2
                ) AS total_inventory
                  
            FROM `inventories` AS i
            WHERE DATE(i.updated_date) BETWEEN :fromdate3 AND :todate
            GROUP BY i.product_id
        ", [
            'fromdate1'     => $inputs['from_date'],
            'fromdate2'     => $inputs['from_date'],
            'fromdate3'     => $inputs['from_date'],
            'todate'        => $inputs['to_date'],
            'typeimport1'   => Inventory::TYPE_IMPORT,
            'typeimport2'   => Inventory::TYPE_IMPORT,
            'typeexport1'   => Inventory::TYPE_EXPORT,
            'typeexport2'   => Inventory::TYPE_EXPORT,
        ]);

        return view('inventory', compact(
            'inventories',
            'inputs'
        ));
    }
}
