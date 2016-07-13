<table class="table table-striped">
   <tr><th>ID</th> <th>Job</th> <th>Parceiro</th> <td>Inicio</td> <th>Fim</th> <th>Status</th> <th>Ações</th></tr>
    @forelse($jobs as $job)
        <tr><td>{{$job->id}}</td> <td>{{$job->nomeJob}}</td> <td>{{$job->parceiro}}</td> <td>{{$job->inicio}}</td> <td>{{$job->fim}}</td> <td>{{$job->status}}</td> <td><a href="{{url()->current()}}/{{$job->id}}"> <button type="button" class="btn btn-danger">Detalhes</button></a></td></tr>
    @empty
    <tr><td>Sem Jobs</td></tr>
    @endforelse
</table>