@extends('layouts.app')
@section('title')
	index
	@endsection
@section('contain')
   
    {{ Auth::user()->name }}
   
    <h2>Projects List</h2>
    <br>
    <br>
 
    @if ( !$projects->count() )
        You have no projects
    @else
        <ul>
            @foreach( $projects as $project )

                <table style="width: 500px; height: 200px" > 
                    
                    <tr>
                        <td>
                            <h1>{{$project->name}}</h1>
                            <a href="{{route('projects.show', $project->slug)}}">
                            <img  scr="#"  width="50px" height="50px" style="margin-right: 10px;margin-bottom: 10px"> 
                            </a>
                            <br>
                            @if($project->status==0)
                            opss!!!!! {{$project->name}} is currently deactivated
                            @else
                            <a style="margin-top: 10px"> {!! link_to_route('projects.show', 'view Detail', array($project->slug), array('class' => 'btn btn-info')) !!}</a>
                           @endif
                        </td>
                        
                      <td>
                      <br>

                               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="margin-top: 150px; margin-left: 10px">
                                    edit
                                </button>
                                <!-- Modal -->
                                 
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                              </div>
                                                {!! Form::model($project, [
                                                            'method' => 'PATCH',
                                                             'route' => ['projects.update', $project->slug]
                                                             ]) 
                                                !!}
                                                <div class="modal-body">

                                                    <h2>Edit Project</h2>


                                                                <div class="form-group">
                                                                    {!! Form::label('name', 'Name:') !!}
                                                                    {!! Form::text('name') !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('slug', 'Slug:') !!}
                                                                    {!! Form::text('slug') !!}
                                                                </div>
                                                                <div class="form-group">
                                                                    {!! Form::label('status', 'Status:') !!}
                                                                    {!! Form::text('status') !!}
                                                                </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" cancel="btn btn-default" data-dismiss="modal">Close</button>
                                                    {!! Form::submit('save change', ['class'=>'btn primary']) !!}
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                          </div>
                                        </div>  
                                       <a style="margin-top: 150px"> {!! Form::open([
                                                    'class' => 'form-inline', 
                                                    'method' => 'DELETE', 
                                                    'route' =>['projects.destroy', $project->slug
                                                                ]
                                                                ]) 
                                                    !!}
                                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                    {!! Form::close() !!}</a>
                                </td>
                                
                     </tr>
                </table>  
                
                <hr>
                <br>
               
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>

   

    
@endsection

