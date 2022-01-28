<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liste Des Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        

     
    </head>
    <body>

        <section style="padding-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">

                                Liste des Posts <a href="{{url('add-post')}}" class="btn btn-success">Nouveau Post</a>

                                @if(Session::has('post_deleted'))
                                    <div class="alert alert-success" role="alert">

                                        {{Session::get('post_deleted')}}
                                        
                                    </div>

                                @endif
                                
                            </div>
                            <div class="card-body">

                                <table class="table table-stripped">

                                    <thead>
                                        <tr>

                                            <th>Id</th>
                                            <th>Titre</th>
                                            <th>Contenu</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                        
                                    </thead>

                                    <tbody>
                                        @foreach($posts as $post)
                                            <tr>

                                                <td>{{$post->id}}</td>
                                                <td>{{$post->titre}}</td>
                                                <td>{{$post->contenu}}</td>
                                                <td>
                                                    <a href="{{url('/posts/'.$post->id)}}" class="btn btn-info">Details</a>
                                                    <a href="{{url('/edit-post/'.$post->id)}}" class="btn btn-success">Modifier</a>

                                                    <a href="{{url('/delete-post/'.$post->id)}}" class="btn btn-danger">Supprimer</a>
                                                </td>
                                                
                                            </tr>




                                            

                                        @endforeach
                                    </tbody>
                                    
                                </table>


                                
                            </div>
                            
                        </div> 
                    </div>
                    
                </div>
                
            </div>
            
        </section>



        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
    </body>
</html>
