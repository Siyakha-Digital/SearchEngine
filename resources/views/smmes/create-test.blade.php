@extends('layouts.app2')
@section('content')

<?php
// Place example data here

?>

<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
  <!-- App preloader-->

  <!-- Page Wrapper -->
  <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

    {{-- Top Navigation Bar --}}
    @include('components.top-navigation-bar')

      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">

        <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">

          <div class="flex items-center space-x-1">
            <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>

              {{-- Header --}}
            <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
              Create a new SMME
            </h2>
          </div>

          {{-- Buttons --}}
          <div class="flex justify-center space-x-2">

            {{-- Preview Button --}}
            <button class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
              Preview
            </button>

            {{-- Submit Button --}}
            <button class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
              Save
            </button>
          </div>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 lg:col-span-8">
            <div class="card">
              <div class="tabs flex flex-col">

                {{-- Tab Navigation --}}
                <div class="is-scrollbar-hidden overflow-x-auto">

                    {{-- Tab List --}}
                  <div class="border-b-2 border-slate-150 dark:border-navy-500">

                    <div class="tabs-list -mb-0.5 flex">

                        {{-- General Tab --}}
                      <button class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5">
                        <i class="fa-solid fa-layer-group text-base"></i>
                        <span>General</span>
                      </button>

                        {{-- Contact Details Tab --}}
                      <button class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5">
                        <i class="fa-solid fa-phone text-base"></i>
                        <span>Contact Details</span>
                      </button>

                        {{-- Other Tab --}}
                      <button class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5">
                        <i class="fa-solid fa-bars-staggered text-base"></i>
                        <span> Other </span>
                      </button>
                    </div>
                  </div>
                </div>

                {{-- General Tab Content --}}
                <div class="tab-content p-4 sm:p-5">
                  <div class="space-y-5">

                    {{-- Name Field--}}
                    <label class="block">
                      <span class="font-medium text-slate-600 dark:text-navy-100">Name</span>
                      <input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" 
                      placeholder="Enter you SMME's name.." type="text">
                    </label>

                    {{-- Slogan Field --}}
                    <label class="block">
                      <span class="font-medium text-slate-600 dark:text-navy-100">Slogan (Caption)</span>
                      <input class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Enter your slogan ..." type="text">
                    </label>

                    {{-- Description Field --}}
                    <div>
                      <span class="font-medium text-slate-600 dark:text-navy-100">Description</span>
                      <div class="mt-1.5 w-full">
                        <div role="toolbar" class="ql-toolbar ql-snow"><span class="ql-formats"><button type="button" class="ql-bold" aria-pressed="false" aria-label="bold"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path><path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path></svg></button><button type="button" class="ql-italic" aria-pressed="false" aria-label="italic"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line><line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line><line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line></svg></button><button type="button" class="ql-underline" aria-pressed="false" aria-label="underline"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect></svg></button><button type="button" class="ql-strike" aria-pressed="false" aria-label="strike"><svg viewBox="0 0 18 18"><line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line><path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path><path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path></svg></button></span><span class="ql-formats"><button type="button" class="ql-blockquote" aria-pressed="false" aria-label="blockquote"><svg viewBox="0 0 18 18"><rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect><rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect><path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path><path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path></svg></button><button type="button" class="ql-code-block" aria-pressed="false" aria-label="code-block"><svg viewBox="0 0 18 18"><polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline><polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline><line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line></svg></button></span><span class="ql-formats"><button type="button" class="ql-header" aria-pressed="false" value="1" aria-label="header: 1"><svg viewBox="0 0 18 18"><path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z"></path></svg></button><button type="button" class="ql-header" aria-pressed="false" value="2" aria-label="header: 2"><svg viewBox="0 0 18 18"><path class="ql-fill" d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"></path></svg></button></span><span class="ql-formats"><button type="button" class="ql-list" aria-pressed="false" value="ordered" aria-label="list: ordered"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line><line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line><path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path><path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path><path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path></svg></button><button type="button" class="ql-list" aria-pressed="false" value="bullet" aria-label="list: bullet"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line><line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line></svg></button></span><span class="ql-formats"><button type="button" class="ql-script" aria-pressed="false" value="sub" aria-label="script: sub"><svg viewBox="0 0 18 18"><path class="ql-fill" d="M15.5,15H13.861a3.858,3.858,0,0,0,1.914-2.975,1.8,1.8,0,0,0-1.6-1.751A1.921,1.921,0,0,0,12.021,11.7a0.50013,0.50013,0,1,0,.957.291h0a0.914,0.914,0,0,1,1.053-.725,0.81,0.81,0,0,1,.744.762c0,1.076-1.16971,1.86982-1.93971,2.43082A1.45639,1.45639,0,0,0,12,15.5a0.5,0.5,0,0,0,.5.5h3A0.5,0.5,0,0,0,15.5,15Z"></path><path class="ql-fill" d="M9.65,5.241a1,1,0,0,0-1.409.108L6,7.964,3.759,5.349A1,1,0,0,0,2.192,6.59178Q2.21541,6.6213,2.241,6.649L4.684,9.5,2.241,12.35A1,1,0,0,0,3.71,13.70722q0.02557-.02768.049-0.05722L6,11.036,8.241,13.65a1,1,0,1,0,1.567-1.24277Q9.78459,12.3777,9.759,12.35L7.316,9.5,9.759,6.651A1,1,0,0,0,9.65,5.241Z"></path></svg></button><button type="button" class="ql-script" aria-pressed="false" value="super" aria-label="script: super"><svg viewBox="0 0 18 18"><path class="ql-fill" d="M15.5,7H13.861a4.015,4.015,0,0,0,1.914-2.975,1.8,1.8,0,0,0-1.6-1.751A1.922,1.922,0,0,0,12.021,3.7a0.5,0.5,0,1,0,.957.291,0.917,0.917,0,0,1,1.053-.725,0.81,0.81,0,0,1,.744.762c0,1.077-1.164,1.925-1.934,2.486A1.423,1.423,0,0,0,12,7.5a0.5,0.5,0,0,0,.5.5h3A0.5,0.5,0,0,0,15.5,7Z"></path><path class="ql-fill" d="M9.651,5.241a1,1,0,0,0-1.41.108L6,7.964,3.759,5.349a1,1,0,1,0-1.519,1.3L4.683,9.5,2.241,12.35a1,1,0,1,0,1.519,1.3L6,11.036,8.241,13.65a1,1,0,0,0,1.519-1.3L7.317,9.5,9.759,6.651A1,1,0,0,0,9.651,5.241Z"></path></svg></button></span><span class="ql-formats"><button type="button" class="ql-indent" aria-pressed="false" value="-1" aria-label="indent: -1"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"></line><polyline class="ql-stroke" points="5 7 5 11 3 9 5 7"></polyline></svg></button><button type="button" class="ql-indent" aria-pressed="false" value="+1" aria-label="indent: +1"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"></line><polyline class="ql-fill ql-stroke" points="3 7 3 11 5 9 3 7"></polyline></svg></button></span><span class="ql-formats"><button type="button" class="ql-direction" aria-pressed="false" value="rtl" aria-label="direction: rtl"><svg viewBox="0 0 18 18"><polygon class="ql-stroke ql-fill" points="3 11 5 9 3 7 3 11"></polygon><line class="ql-stroke ql-fill" x1="15" x2="11" y1="4" y2="4"></line><path class="ql-fill" d="M11,3a3,3,0,0,0,0,6h1V3H11Z"></path><rect class="ql-fill" height="11" width="1" x="11" y="4"></rect><rect class="ql-fill" height="11" width="1" x="13" y="4"></rect></svg><svg viewBox="0 0 18 18"><polygon class="ql-stroke ql-fill" points="15 12 13 10 15 8 15 12"></polygon><line class="ql-stroke ql-fill" x1="9" x2="5" y1="4" y2="4"></line><path class="ql-fill" d="M5,3A3,3,0,0,0,5,9H6V3H5Z"></path><rect class="ql-fill" height="11" width="1" x="5" y="4"></rect><rect class="ql-fill" height="11" width="1" x="7" y="4"></rect></svg></button></span><span class="ql-formats"><span class="ql-size ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select></span><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="6"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option value="3"></option><option value="4"></option><option value="5"></option><option value="6"></option><option selected="selected"></option></select></span><span class="ql-formats"><span class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-2"><svg viewBox="0 0 18 18"><line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line><polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline><line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-2"><span tabindex="0" role="button" class="ql-picker-item ql-selected ql-primary"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-color" style="display: none;"><option selected="selected"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option value="#ffffff"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select><span class="ql-background ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-3"><svg viewBox="0 0 18 18"><g class="ql-fill ql-color-label"><polygon points="6 6.868 6 6 5 6 5 7 5.942 7 6 6.868"></polygon><rect height="1" width="1" x="4" y="4"></rect><polygon points="6.817 5 6 5 6 6 6.38 6 6.817 5"></polygon><rect height="1" width="1" x="2" y="6"></rect><rect height="1" width="1" x="3" y="5"></rect><rect height="1" width="1" x="4" y="7"></rect><polygon points="4 11.439 4 11 3 11 3 12 3.755 12 4 11.439"></polygon><rect height="1" width="1" x="2" y="12"></rect><rect height="1" width="1" x="2" y="9"></rect><rect height="1" width="1" x="2" y="15"></rect><polygon points="4.63 10 4 10 4 11 4.192 11 4.63 10"></polygon><rect height="1" width="1" x="3" y="8"></rect><path d="M10.832,4.2L11,4.582V4H10.708A1.948,1.948,0,0,1,10.832,4.2Z"></path><path d="M7,4.582L7.168,4.2A1.929,1.929,0,0,1,7.292,4H7V4.582Z"></path><path d="M8,13H7.683l-0.351.8a1.933,1.933,0,0,1-.124.2H8V13Z"></path><rect height="1" width="1" x="12" y="2"></rect><rect height="1" width="1" x="11" y="3"></rect><path d="M9,3H8V3.282A1.985,1.985,0,0,1,9,3Z"></path><rect height="1" width="1" x="2" y="3"></rect><rect height="1" width="1" x="6" y="2"></rect><rect height="1" width="1" x="3" y="2"></rect><rect height="1" width="1" x="5" y="3"></rect><rect height="1" width="1" x="9" y="2"></rect><rect height="1" width="1" x="15" y="14"></rect><polygon points="13.447 10.174 13.469 10.225 13.472 10.232 13.808 11 14 11 14 10 13.37 10 13.447 10.174"></polygon><rect height="1" width="1" x="13" y="7"></rect><rect height="1" width="1" x="15" y="5"></rect><rect height="1" width="1" x="14" y="6"></rect><rect height="1" width="1" x="15" y="8"></rect><rect height="1" width="1" x="14" y="9"></rect><path d="M3.775,14H3v1H4V14.314A1.97,1.97,0,0,1,3.775,14Z"></path><rect height="1" width="1" x="14" y="3"></rect><polygon points="12 6.868 12 6 11.62 6 12 6.868"></polygon><rect height="1" width="1" x="15" y="2"></rect><rect height="1" width="1" x="12" y="5"></rect><rect height="1" width="1" x="13" y="4"></rect><polygon points="12.933 9 13 9 13 8 12.495 8 12.933 9"></polygon><rect height="1" width="1" x="9" y="14"></rect><rect height="1" width="1" x="8" y="15"></rect><path d="M6,14.926V15H7V14.316A1.993,1.993,0,0,1,6,14.926Z"></path><rect height="1" width="1" x="5" y="15"></rect><path d="M10.668,13.8L10.317,13H10v1h0.792A1.947,1.947,0,0,1,10.668,13.8Z"></path><rect height="1" width="1" x="11" y="15"></rect><path d="M14.332,12.2a1.99,1.99,0,0,1,.166.8H15V12H14.245Z"></path><rect height="1" width="1" x="14" y="15"></rect><rect height="1" width="1" x="15" y="11"></rect></g><polyline class="ql-stroke" points="5.5 13 9 5 12.5 13"></polyline><line class="ql-stroke" x1="11.63" x2="6.38" y1="11" y2="11"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-3"><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#000000" style="background-color: rgb(0, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-background" style="display: none;"><option value="#000000"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option selected="selected"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select></span><span class="ql-formats"><span class="ql-font ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-4"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-4"><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="serif"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="monospace"></span></span></span><select class="ql-font" style="display: none;"><option selected="selected"></option><option value="serif"></option><option value="monospace"></option></select></span><span class="ql-formats"><span class="ql-align ql-picker ql-icon-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-5"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-5"><span tabindex="0" role="button" class="ql-picker-item ql-selected"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="center"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line><line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="right"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line><line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="justify"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line><line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line></svg></span></span></span><select class="ql-align" style="display: none;"><option selected="selected"></option><option value="center"></option><option value="right"></option><option value="justify"></option></select></span><span class="ql-formats"><button type="button" class="ql-clean" aria-pressed="false" aria-label="clean"><svg class="" viewBox="0 0 18 18"><line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line><line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line><line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line><line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect></svg></button></span></div><div class="h-48 ql-container ql-snow" x-init="$el._x_quill = new Quill($el,{
                            modules : {
                              toolbar: [
                                ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                ['blockquote', 'code-block'],
                                [{ header: 1 }, { header: 2 }], // custom button values
                                [{ list: 'ordered' }, { list: 'bullet' }],
                                [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                                [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                                [{ direction: 'rtl' }], // text direction
                                [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                                [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                                [{ font: [] }],
                                [{ align: [] }],
                                ['clean'], // remove formatting button
                              ],
                            },
                            placeholder: 'Describe your SMME...',
                            theme: 'snow',
                          })"><div class="ql-editor ql-blank" contenteditable="true" data-placeholder="Enter your content..."><p><br></p></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                      </div>
                    </div>

                    
                    <div>

                    {{-- Upload Image Block --}}
                      <span class="font-medium text-slate-600 dark:text-navy-100">Your SMME Image (Logo)</span>
                      <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                        <div class="filepond--root filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false" style="height: 76px;"><input class="filepond--browser" type="file" id="filepond--browser-0mgv3cd8j" name="filepond" aria-controls="filepond--assistant-0mgv3cd8j" aria-labelledby="filepond--drop-label-0mgv3cd8j" multiple=""><a class="filepond--credits" aria-hidden="true" href="https://pqina.nl/" target="_blank" rel="noopener noreferrer" style="transform: translateY(68px);">Powered by PQINA</a><div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-0mgv3cd8j" id="filepond--drop-label-0mgv3cd8j" aria-hidden="true">Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform: translate3d(0px, 60px, 0px);"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="true"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 68px, 0px);"></div></div><span class="filepond--assistant" id="filepond--assistant-0mgv3cd8j" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div><fieldset class="filepond--data"></fieldset></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 lg:col-span-4">
            <div class="card space-y-5 p-4 sm:p-5">
              
            {{-- Category Block --}}
              <label class="block">
                <span class="font-medium text-slate-600 dark:text-navy-100">Category</span>
                <select class="mt-1.5 w-full tomselected ts-hidden-accessible" x-init="$el._x_tom = new Tom($el,{create: false,sortField: {field: 'text',direction: 'asc'}})" id="tomselect-2" tabindex="-1">
                  <option value="">Select the category</option>
                  <option value="digital">Manufacturing</option>
                  <option value="technology">Retail</option>
                  <option value="home">Restaurant</option>
                  <option value="accessories">Financial Services</option>
                </select><div class="ts-wrapper mt-1.5 w-full single"><div class="ts-control"><input type="text" autocomplete="off" size="1" tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="tomselect-2-ts-dropdown" id="tomselect-2-ts-control" placeholder="Select the category" aria-activedescendant="tomselect-2-opt-4"></div><div class="ts-dropdown single" style="display: none; visibility: visible;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-2-ts-dropdown"><div data-selectable="" data-value="accessories" class="option active" role="option" id="tomselect-2-opt-4" aria-selected="true">Accessories</div><div data-selectable="" data-value="digital" class="option" role="option" id="tomselect-2-opt-1">Digital</div><div data-selectable="" data-value="home" class="option" role="option" id="tomselect-2-opt-3">Home</div><div data-selectable="" data-value="technology" class="option" role="option" id="tomselect-2-opt-2">Technology</div></div></div></div>
              </label>
              <label class="block">
                <span class="font-medium text-slate-600 dark:text-navy-100">Tags</span>
                <input class="mt-1.5 w-full tomselected ts-hidden-accessible" placeholder="Enter Tags" x-init="$el._x_tom = new Tom($el,{create: true})" id="tomselect-3" tabindex="-1"><div class="ts-wrapper mt-1.5 w-full multi has-options"><div class="ts-control"><input type="text" autocomplete="off" size="1" tabindex="0" role="combobox" aria-haspopup="listbox" aria-expanded="false" aria-controls="tomselect-3-ts-dropdown" id="tomselect-3-ts-control" placeholder="Enter Tags"></div><div class="ts-dropdown multi" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-3-ts-dropdown"></div></div></div>
              </label>

              <label>
                <span class="font-medium text-slate-600 dark:text-navy-100">Publish Date</span>
                <span class="relative mt-1.5 flex">
                  <input x-init="$el._x_flatpickr = flatpickr($el)" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input" placeholder="Choose date..." type="text" readonly="readonly">
                  <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div>

        <div class="card p-4 sm:p-5">
            <p class="text-base font-medium text-slate-700 dark:text-navy-100">
              Shipping Address
            </p>
            <div class="mt-4 space-y-4">
              <label class="block">
                <span>Company name</span>
                <span class="relative mt-1.5 flex">
                  <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your Company" type="text">
                  <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-building text-base"></i>
                  </span>
                </span>
              </label>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Client name</span>
                  <span class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your Name" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="far fa-user text-base"></i>
                    </span>
                  </span>
                </label>
                <label class="block">
                  <span>Phone number</span>
                  <span class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="(999) 999-9999" type="text" x-input-mask="{numericOnly: true, blocks: [0, 3, 3, 4], delimiters: ['(', ') ', '-']}">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa fa-phone"></i>
                    </span>
                  </span>
                </label>
              </div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                <label class="block sm:col-span-8">
                  <span>Email Address</span>
                  <div class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Email address" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa-regular fa-envelope text-base"></i>
                    </span>
                  </div>
                </label>
                <label class="block sm:col-span-4">
                  <span>Pincode</span>
                  <div class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Pincode" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa-solid fa-map-pin text-base"></i>
                    </span>
                  </div>
                </label>
              </div>
              <label class="block">
                <span>Address</span>
                <textarea rows="4" placeholder="Your Address (Area and Street)" class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"></textarea>
              </label>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>City</span>
                  <span class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your City/Town" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa-solid fa-city text-base"></i>
                    </span>
                  </span>
                </label>
                <label class="block">
                  <span>State</span>
                  <span class="relative mt-1.5 flex">
                    <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Your State" type="text">
                    <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                      <i class="fa-solid fa-flag"></i>
                    </span>
                  </span>
                </label>
              </div>
              <div x-data="{sameBillingAddress:true}">
                <div class="flex-wrap items-start space-y-2 pt-2 sm:flex sm:space-y-0 sm:space-x-5">
                  <label class="inline-flex items-center space-x-2">
                    <input x-model="sameBillingAddress" class="form-checkbox is-basic size-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent" type="checkbox">
                    <span>Same is Billing Address</span>
                  </label>
                  <div>
                    <button @click="sameBillingAddress = false" class="border-b border-dotted border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                      Add Billing Address
                    </button>
                  </div>
                </div>
                <div x-show="!sameBillingAddress" x-collapse="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                  <label class="block pt-4">
                    <span>Billing Address</span>
                    <textarea rows="4" placeholder="Enter billing address" class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"></textarea>
                  </label>
                </div>
              </div>
              <div class="flex justify-end space-x-2">
                <button class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Prev</span>
                </button>
                <button class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  <span>Next</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
      </main>
    
  </div>
  <!--
    This is a place for Alpine.js Teleport feature
    @see https://alpinejs.dev/directives/teleport
  -->
  <div id="x-teleport-target"></div>
  <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
  </script>


  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
      xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
      style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
      <defs id="SvgjsDefs1002"></defs>
      <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
      <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>

</body>

@endsection