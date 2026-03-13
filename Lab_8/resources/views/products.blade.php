<table border="1">

<tr>
<th>Tên</th>
<th>Giá</th>
</tr>

@foreach($products as $product)

<tr>

<td>{{ $product->name }}</td>

<td>

@if($product->price > 10000)

<span style="color:red">
{{ $product->price }} (VIP)
</span>

@else

{{ $product->price }}

@endif

</td>

</tr>

@endforeach

</table>