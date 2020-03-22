<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  public function getPdf($type = 'stream')
{
    $pdf = app('dompdf.wrapper')->loadView('report-pdf', ['report' => $this]);

    if ($type == 'stream') {
        return $pdf->stream('invoice.pdf');
    }

    if ($type == 'download') {
        return $pdf->download('invoice.pdf');
    }
}
...
return $report->getPdf(); // Returns stream default
return $report->getPdf('download'); // Returns the PDF as download


public function orders()
{
  return $this-> belongsTo('App\Order', 'order_id');
}

public function products()
{
  return $this-> belongsTo('App\Product', 'product_id');
}



}
