<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Category;
use App\Product;
use App\Stock;
use App\FoodType;


class ProductController extends Controller
{


        function category_form()
        {
          return view('product.category.create');
        }


                  function category_index()
                  {
                    $categories = Category::all();
                    return view('product.category.index', compact('categories'));
                  }


                    function category_create(Request $request)
                    {
                      Category::insert([
                        'name'=>ucwords($request->name),
                        'description'=>ucwords($request->description),
                      ]);

                    return redirect()->route('category');
                    }

                                      function category_updatepage($id)
                                      {
                                        $categories = Category::findOrfail($id);
                                        return view('product.category.cat_updatepage', compact('categories'));
                                      }


                                    function category_update(Request $request, $id)
                                      {
                                        Category::find($id)->update([
                                          'name'=>ucwords($request->name),
                                          'description'=>ucwords($request->description),
                                        ]);

                                        return redirect()->route('category');

                                      }



          function cat_destroy($id)
           {
               Category::where('id',$id)->delete();
               return redirect()->route('category')
               ->with('success','Category deleted successfully.');
           }


//category end





//product start------->

    function product_form()
    {
      $products = Product::all();
      $cato = Category::all();
      $type = FoodType::all();
      return view('product.product_list.create', compact('products', 'cato','type'));
    }


        function product_index()
        {
          $products = Product::all();
          $cato = Category::all();

          return view('product.product_list.index',  compact('products', 'cato'));
        }


            function product_create(Request $request)
            {

              $last_inserted_id = Product::insertGetId([
                'product_code'=>$request->product_code,
                'product_image'=>$request->product_image,
                'name'=>$request->name,
                'cat_id'=>$request->cat_id,
                'type_id'=>$request->type_id,
                'description'=>$request->description,
                'price'=>$request->price,
                'stock_quantity'=>$request->stock_quantity,
                'status'=> 1,

              ]);
                  if ($request->hasFile('product_image')) {
                        $photo_upload     =  $request ->product_image;
                        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                        $photo_name       =  $last_inserted_id . "." . $photo_extension;
                        Image::make($photo_upload)->resize(320,240)->save(base_path('public/Image/product_photo/'.$photo_name),100);
                        Product::find($last_inserted_id)->update([
                            'product_image' => $photo_name,
                                ]);
                              }
                              return redirect()->route('product');
                      }


                //product update................>
                                  function product_updatepage($id)
                                  {
                                    $pro = Product::findOrfail($id);
                                    $cato = Category::all();
                                    $type = FoodType::all();
                                    return view('product.product_list.p_updatepage',  compact('pro', 'cato','type'));
                                  }

                                  function product_update(Request $request, $id)
                                  {
                                    if(empty($request->product_image)){
                                      $picture = Product::whereid($id)->pluck('product_image')->first();
                                      //dd($picture);
                                    }
                                    else{
                                      $picture = $request->product_image;
                                    }
                                    Product::findOrfail($id)->update([
                                      'product_code'=>$request->product_code,
                                      'product_image'=>$picture,
                                      'name'=>$request->name,
                                      'type_id'=>$request->type_id,
                                      'cat_id'=>$request->cat_id,
                                      'description'=>$request->description,
                                      'price'=>$request->price,
                                      'stock_quantity'=>$request->stock_quantity,
                                      'status'=> $request->status,
                                        ]);

                                        if ($request->hasFile('product_image')) {
                                              $photo_upload     =  $picture;
                                              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                                              $photo_name       =  $id . "." . $photo_extension;
                                              Image::make($photo_upload)->resize(320,240)->save(base_path('public/Image/product_photo/'.$photo_name),100);
                                              Product::find($id)->update([
                                                  'product_image' => $photo_name,
                                                      ]);
                                                    }

                                        return redirect()->route('product');
                                      }


                  function destroy($id)
                   {
                       Product::where('id',$id)->delete();
                       return redirect()->route('product')
                       ->with('success','Product deleted successfully.');
                   }





//product end







//stock start

      function stock_form()
      {
        return view('product.stock.create');
      }

              function stock_index()
              {
                $stocks = Stock::all();
                return view('product.stock.index', compact('stocks'));
              }

                      function stock_create(Request $request)
                      {
                        Stock::insert([
                        'product_code'=>$request->product_code,
                        'name'=>$request->name,
                        'quantity'=>$request->quantity,
                        'description'=>$request->description,
                      ]);

                      return back();
                      }


                  function stock_updatepage($id)
                  {
                    $stocks = Stock::findOrfail($id);

                    return view('product.stock.update', compact('stocks'));
                  }


              public function stock_update(Request $request, $id)
                {
                  Stock::find($id)->update([
                    'quantity'=>$request->quantity,

                  ]);

                    return redirect()->route('stock')
                              ->with('success','Stock Quantity updated successfully.');
                }


    function stock_destroy($id)
     {
         Stock::where('id',$id)->delete();
         return redirect()->route('stock')
         ->with('success','Stock deleted successfully.');
     }




    function sort($id)
     {

       $s = $id;
       $products = Product::all();
       if($s == 1)
       {
         $products = Product::where('type_id', $s)->get();
         //dd($products);
       }
       elseif($s== 2)
       {
         $products = Product::where('type_id', $s)->get();
       }
       elseif($s == 3)
       {
         $products = Product::where('type_id', $s)->get();
       }
       else{
          $products = Product::all();
       }

       return view('frontpage.homepage.index',  compact('products'));

     }



}
