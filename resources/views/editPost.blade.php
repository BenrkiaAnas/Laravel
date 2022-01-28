<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modifier Des Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        

     
    </head>
    <body>

        <section style="padding-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">

                            <div class="card-header">

                                Modifier Un Post
                                
                            </div>
                            <div class="card-body">

                                @if(Session::has('post_updated'))
                                    <div class="alert alert-success" role="alert">

                                        {{Session::get('post_updated')}}
                                        
                                    </div>

                                @endif

                                <form method="post" action="{{url('/update_post/'.$post->id)}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="titre">Titre du Post </label>
                                        <input value="{{$post->titre}}" type="text" name="titre" class="form-controller" placeholder="Entrer un titre"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="contenu">Contenu du Post </label>
                                        <textarea rows="3" name="contenu" class="form-controller" placeholder="Entrer un contenu">{{$post->contenu}}</textarea>
                                    </div>
                                    <button class="btn btn-success" type="submit">Modifier un Post</button>
                                    
                                </form>


                                
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
