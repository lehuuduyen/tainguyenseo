<rss version="2.0">
    <channel>
        <title>{{ $post->title }}</title>
        <link>{{ url('posts/' . $post->id) }}</link>
        <description>{{ $post->description }}</description>
        <item>
            <title>{{ $post->title }}</title>
            <link>{{ url('posts/' . $post->id) }}</link>
            <description><![CDATA[{!! $post->description !!}]]></description>
            <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            <link><?= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/posts/details/".$post->id?> </link>
            <guid>{{ url('posts/' . $post->id) }}</guid>
        </item>
    </channel>
</rss>
