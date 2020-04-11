@extends('layouts.head')
  <body>
@include('layouts.nav')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0 text-dark">登録確認</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
            <!-- /.col-md-6 -->
              <div class="FormBox">
                <div class="header_table">
                <table>
                <thead>
                <tr>
                <th>地域名</th>
                <th>分類番号</th>
                <th>ひらがな</th>
                <th>４桁数字</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>{{$CarData['Region']}}</td>
                <td>{{$CarData['Classification']}}</td>
                <td>{{$CarData['Distinction']}}</td>
                <td>{{$CarData['Mainnumber']}}</td>
                </tr>
                </tbody>
                </table>
                </div>
                <div class="header_table mt-5">
                <table>
                <thead>
                <tr>
                <th class="check">色</th>
                <th class="check">ブランド</th>
                <th class="check">ボディタイプ</th>
                <th class="check">危険運転発生場所</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td class="check">{{$CarData['Color']}}</td>
                <td class="check">{{$CarData['Bland']}}</td>
                <td class="check">{{$CarData['body_type']}}</td>
                <td class="check">{{$CarData['Prefecture_city']}}</td>
                </tr>
                </tbody>
                </table>
                </div>

                <div class="header_table mt-5">
                <table>
                <thead>
                <tr>
                <th>補足事項</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td class="SiteDescription">{{$CarData['text']}}</td>
                </tr>
                </tbody>
                </table>
                </div>

                <div class="header_table mt-5">
                  <form class="" action="{{ url('/add')}}" method="post">
                    @csrf
                    <input type="hidden" name="Region" value="{{$CarData['Region']}}">
                    <input type="hidden" name="Classification" value="{{$CarData['Classification']}}">
                    <input type="hidden" name="Distinction" value="{{$CarData['Distinction']}}">
                    <input type="hidden" name="Mainnumber" value="{{$CarData['Mainnumber']}}">
                    <input type="hidden" name="Color" value="{{$CarData['Color']}}">
                    <input type="hidden" name="Bland" value="{{$CarData['Bland']}}">
                    <input type="hidden" name="bodytype" value="{{$CarData['body_type']}}">
                    <input type="hidden" name="Prefecture_city" value="{{$CarData['Prefecture_city']}}">
                    <input type="hidden" name="text" value="{{$CarData['text']}}">
                    <input type="submit" name="" value="送信">
                  </form>
                </div>
              </div>
            </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>


@include('layouts.footer')
