
<table>

    <tbody> 
           <th>   </th>
           <th>  $cars </th>
    
            @foreach ($cars as $indexcar)

            <tr> {{$loop->index+1}}  </tr>
            <tr> {{$indexcar}} <br> </tr>

             @endforeach 
    </tbody>

     
</table>






