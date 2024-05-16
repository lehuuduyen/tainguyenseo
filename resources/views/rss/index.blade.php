<rss version="2.0">

<channel>
  <title>Title</title>
  <description>Description</description>
  <keywork>title|domain</keywork>
  @foreach ($posts as $post)
    <item>
        <title>{{$post->title}}</title>
        <description>{!! $post->demo !!}</description>
        <keywork>{{$post->title}}|{{$post->domain}}</keywork>
        <category>{{$post->category->name}}</category>
        <author>{{$post->createdUser->username}}</author>
        <link><?= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/posts/details/".$post->id?> </link>
        <guid>{{$post->id}}</guid>
    </item>
  @endforeach
</channel>

</rss>
