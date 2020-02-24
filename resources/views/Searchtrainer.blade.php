<div class="container">
         @if(isset($trainers))
         <p> The Search results for your query <b> {{ $query }} </b> are :</p>
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>id</th>
                     <th>name</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($trainers as $trainer)
                 <tr>
                     <td>{{$trainer->id}}</td>
                     <td>{{$trainer->nameAr}}</td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
         @endif
     </div>