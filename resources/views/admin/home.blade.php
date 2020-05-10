@include('layouts.head')
<div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
       <div class="card">
         <div class="card-header">
           <h3 class="card-title">メインループ</h3>
           <div class="container">
             <button type="button" name="button" class="btn btn-danger"><a href="{{action('ManagerController@afi')}}" class="text-light">広告</a></button>
           </div>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
           <table class="table table-bordered">
             <thead>
               <tr>
                 <th style="width: 10px">#</th>
                 <th style="width: 10px">地域</th>
                 <th style="width: 10px">ナンバー</th>
                 <th style="width: 10px">表示ナンバー</th>
                 <th style="width: 10px">テキスト</th>
                 <th style="width: 100px">削除</th>
               </tr>
             </thead>
             @foreach ($posts as $post)
             <tbody>
               <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->Region}}</td>
                 <td>{{$post->Mainnumber}}</td>
                 <td>{{$post->maskednumber}}</td>
                 <td>{{$post->text}}</td>
                 <td>
                   <form class="m-0" action="{{action( 'ManagerController@delete',$post->id )}}" method="get">
                     @csrf
                     <input type="hidden" name="delete" value="{{$post->id}}">
                     <button type="submit" name="" class="btn btn-danger">削除</button>
                   </form>
                 </td>
               </tr>
             </tbody>
             @endforeach
           </table>
         </div>
         <!-- /.card-body -->
       </div>
