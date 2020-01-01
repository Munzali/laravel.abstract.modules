

@if(!empty($list))

  @foreach($list as $key => $value)


    <option value="{{ $key }}">{{ $value }}</option>


  
    
  
 
  @endforeach
  @else
  <option value="">No list</option>

@endif
</tbody>
</table>