<h1>{{ $lesson->name }}</h1>
<div>
  <span>空き状況: {{ $lesson->vacancyLevel->mark() }}</span>
</div>

<!-- ここから追加 -->
<div>
  @can('reserve', $lesson)
    <span class="btn btn-primary disabled">予約できません</span>
    @else
    <button class="btn btn-primary">このレッスンを予約する</button>
  @endcan
</div>
<!-- ここまで追加 -->