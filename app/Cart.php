<?php
//* El carrito se creará cada vez que acceda a él ó se agregue un item en base al anterior, se hace para tener el estado correcto del carrito, para que esté al día.
//Como agrupa los productos lo que hace es verificar si el producto está ya incluido en el carrito y si está solamente le suma unidades, no lo sobreescribe.
//
//No lo voy a hacer ahora pero el planteo del carrito no me parece comercialmente correcto, porque lo correcto sería guardar los precios unitariospor artículo y no los totales. Es cierto que podemos sacar los unitarios dividiendo por la cantidad comprada, pero me parece más lógico a la inversa.
//
namespace App;

class Cart{
    public $items = null;//Son grupos de productos, agrupa los productos similares
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    //dd($oldCart);
    }

    public function add($item, $id){
        $storedItem = [ 'qty' => 0, 'price' => $item->price, 'color' => $item->color, 'size' => $item->size,
         'item' => $item];//storedItem es el grupo de items a los cuales me refiero, ésta línea es para crearlo si no lo tengo
        if($this->items){//aquí chequeo si hay items en el carrito
            if(array_key_exists($id, $this->items)){//aquí si de los que hay está incluido el que quiero agregar
                $storedItem = $this->items[$id];//si está asocia el item al array de ese artículo ya incluido
            }
        }
        $storedItem['qty']++;//aquí sumamos un artículo
        $storedItem['price'] = $item->price * $storedItem['qty'];//
        //dd($storedItem);
        $this->items[$id] = $storedItem; //si no estaba incluido, acá crea una nueva entrada en el array items con el nuevo artículo
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }
}
