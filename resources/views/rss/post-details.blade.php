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
            <guid>{{ url('posts/' . $post->id) }}</guid>
        </item>
    </channel>
</rss>
