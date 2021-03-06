@extends('app')
@section('content')
<div class="wrap">
        <div class="n_position"><a href="/">首页</a> > <a href="{{route('news.index')}}">最新资讯</a> > <a href="{{route('news.show',$news->id)}}">{{$news->title}}</a></div>
        <div class="n_nav">
                               
        </div>
        <div class="clear"></div>
</div>
<div class="n_main">
     <div class="wrap">
                <div class="n_show_box">
                        <h1 class="n_show_title">{{$news->title}}</h1>
                        <div class="n_show_info">发布时间：{{$news->created_at}}&nbsp;&nbsp;&nbsp;来源：本站</div>
                        <div class="n_show_con">
                             <p align="center" style="text-align:center;">
	<span style="font-family:Calibri;font-size:10.5pt;"><span>{{$news->title}}</span></span> 
</p>
<p align="center" style="text-align:center;">
	<span style="font-family:Calibri;font-size:10.5pt;">&nbsp;</span> 
</p>
{!!$news->content!!}
                        </div>
                        <div class="clear"></div>
                        <ul class="n_show_next">
								
                            @isset($prevous)
                            <li class="previous">
                                        <a href="{{route('news.show', $prevous->id)}}">上一篇：{{$prevous->title}}</a>
                            </li>
                            @endisset
                            
                            @isset($next)
                            <li class="next">
                                        <a href="{{route('news.show', $next->id)}}">下一篇：{{$next->title}}</a>
                            </li>
                            @endisset
                            
                        </ul>                        
                        
                </div>
     </div>
</div>
@endsection