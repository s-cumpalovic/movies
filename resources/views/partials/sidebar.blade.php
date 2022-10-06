<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        

        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div class="text-warning bg-dark">Latest movies:</div>
            <div id="sidebar-wrapper" class="form-control mb-5 p-3">
              <ul class="sidebar-nav">
                @foreach($latestMovies->take(5) as $movie)

                  <li>{{$movie->title}}</li>  
                  
                @endforeach
                </ul>
            </div> <!-- /#sidebar-wrapper -->

        </div> <!-- /#wrapper -->
   
  </html>