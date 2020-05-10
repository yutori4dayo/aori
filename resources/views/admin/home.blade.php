@include('layouts.head')

<nav class="mb-0 mx-5 mt-5">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ホーム</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">プロフィール</a>
  </div>
</nav>

<div class="tab-content mt-3" id="nav-tabContent">
  <div class="tab-pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">ホーム</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th style="width: 5%">#</th>
                     <th style="width: 10%">地域</th>
                     <th style="width: 10%">ナンバー</th>
                     <th style="width: 15%">表示ナンバー</th>
                     <th style="width: 50%">テキスト</th>
                     <th style="width: 20%">削除</th>
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
                         <input type="hidden" name="type" value="1">
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
         </div>
       </div>
    </div>
  </div>
<div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <form class="" action="{{ action('ManagerController@afiliate')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">新規作成</button>
  </form>

  <div class="container-fluid">
     <div class="row">
       <div class="col-md-12">
         <div class="card">
           <div class="card-header">
             <h3 class="card-title">アフィリエイトバナー</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th style="width: 5%">#</th>
                   <th style="width: 10%">名称</th>
                   <th style="width: 45%">url</th>
                   <th style="width: 10%">サイズ</th>
                   <th style="width: 10%">セクション</th>
                   <th style="width: 10%">削除</th>
                 </tr>
               </thead>
               @foreach ($banners as $banner)
               <tbody>
                 <tr>
                   <td>{{$banner->id}}</td>
                   <td>{{$banner->name}}</td>
                   <td>{!! $banner->url !!}</td>
                   <td>{{$banner->size}}</td>
                   <td>{{$banner->sectionFlg}}</td>
                   <td>
                     <form class="m-0" action="{{action( 'ManagerController@delete',$banner->id)}}" method="get">
                       @csrf
                       <input type="hidden" name="delete" value="{{$banner->id}}">
                       <input type="hidden" name="type" value="2">
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
       </div>
     </div>
  </div>
</div>
</div>

@include('layouts.footer')
