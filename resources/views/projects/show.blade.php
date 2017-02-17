@extends('layouts.app')
@section ('title')
task list
@endsection
 
@section('contain')
    <h2>{{ $project->name }}</h2>
 
    @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else
        <ul>
            @foreach( $project->tasks as $task )
            <table style="width: 500px;height: 200px" >
            {!!Form::open([
                'class'=>'form-inline',
                'method'=>'DELETE',
                'route'=>['projects.tasks.destroy', $project->slug, $task->slug]
                        ])
            !!} 
                <tr>
                <td>   <h1> {{$task->name}}</h1>
                <br>
                <br>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$task->id}}">
                  View Detail
                </button>
                <!-- Modal -->
                    <div class="modal fade" id="{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Detail {{$task->name}}</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table table-condensed">
                                <tr>
                                    <td>
                                        Id
                                    </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>
                                        Slug
                                    </td>
                                    <td>
                                        Completed
                                    </td>
                                    <td>
                                        Description
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{$task->id}}
                                    </td>
                                    <td>
                                        {{$task->name}}
                                    </td>
                                    <td>
                                        {{$task->slug}}
                                    </td>
                                    <td>
                                        {{$task->completed}}
                                    </td>
                                    <td>
                                        {{$task->description}}
                                    </td>
                                </tr>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            
                          </div>
                        </div>
                     </div>
                </div>
                </td>
                  <td>        
                {!! link_to_route('projects.tasks.edit', 'Edit', [$project->slug, $task->slug], ['class' => 'btn btn-info']
                                 ) 
                !!}
 
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        
                {!!Form::close()!!}
            </td>
            </tr>
            <hr>
            <br>
            @endforeach
            </table>
        </ul>
    @endif
    <br>

    {!! link_to_route('projects.tasks.create', 'Add task', $project->slug)!!}

@endsection

<!-- Button trigger modal -->



 