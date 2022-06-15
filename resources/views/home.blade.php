@extends('layouts.main')

@section('title','藝起•繪星-首頁')
<style>
/* fieldset, legend {
   all: revert;
} */
</style>

@section('content')
<div class="text-center">
    <br> 
    <img class="rounded-circle" src="{{ asset('picture/icon.png') }}" /><br> 

    <br> drawtogether<br> <br> 
    <h1>藝起•繪星</h1> 
    <h3>藝起繪出星辰吧！</h3>

    <div class="about text-start">
        
        <fieldset id="p1" class="border border-3 rounded border-success p-2 ">
            <legend class="float-none w-auto p-2 fs-4 text-success">創立原因</legend>
                <div class="row p-3 fs-5">
                    當初創立的原因，來自於我們其中一名團員的家庭，他的其中一位家人患有重度自閉症，從小看著各式各樣的「外星人」，加上「媒體過分誇大」的渲染下，為自閉症與亞斯伯格症畫上等號，貼上「聰明」的標籤，使更多嚴重的自閉症患者，無法步入職場，因此我們想創立一個「不以營利為目的」的營隊，帶領自閉症投入非凡的藝術中，讓世界看見不一樣的自閉症，遇見難能可貴的純真。
                </div>
        </fieldset>

        <fieldset id="p1" class="border border-3 rounded border-success p-2 ">
            <legend class="float-none w-auto p-2 fs-4 text-success">主要活動</legend>
                <div class="row p-3 fs-5">
                    我們的主要活動是閉嘴的，一些小組自演，是5天簡單的教教活動，每天1小時繪畫，1小時陪護他們的行為規律                
                </div>
        </fieldset>

        <fieldset id="p1" class="border border-3 rounded border-success p-2 ">
            <legend class="float-none w-auto p-2 fs-4 text-success">預計效益</legend>
                <div class="row p-3 fs-5">
                    將繪畫成品做成週邊商品義賣，並把公益收入捐獻
                </div>
        </fieldset>

    </div>
    <BR>
</div>

@stop

