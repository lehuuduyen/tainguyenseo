<channel>
  <title>Title</title>
  <description>Description</description>
  <keywork>title|domain</keywork>
  @foreach ($rules as $rule)
    <item>
        <title>{{$rule->regulation}}</title>
        <link><?= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/regulations"?> </link>
        <pubDate>{{ $rule->created_at->toRssString() }}</pubDate>
    </item>
  @endforeach
</channel>