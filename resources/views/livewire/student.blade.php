<div>
    <h1>Student</h1>
    @foreach($student as $student)

    <livewire:student-list :name="$student"/>
    @endforeach
    
</div>
