<channel>
  <title>Title</title>
  <description>Description</description>
  <keywork>title|domain</keywork>
  @foreach ($tools as $tool)
    <item>
        <title>{{$tool->name}}</title>
        <link>{{ url($tool->url) }}</link>
        <description><![CDATA[{!! $tool->tool_description !!}]]></description>
        <link><?= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/introduction"?> </link>
        <pubDate>{{ $tool->created_at->toRssString() }}</pubDate>
    </item>
  @endforeach
</channel>