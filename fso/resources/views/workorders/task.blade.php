<div class="card-body">
    <article> 
        <h4> Type: {{ $task->description }} </h4> 
        <div class="body"> Assigned employee: {{ $task->employee->name}} @ {{ $task->created_at}} </div>
    </article>
    <hr>
</div>
