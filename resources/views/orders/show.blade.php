{{$order->id}}

<form action="{{route("orders.destroy", $order->id)}}" method="POST"> 
    @csrf
    @method('DELETE')
    <input type="submit">
</form>