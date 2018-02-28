Shortcut	        Result

lay             	@layout('name')

ext	                @extends('name')

sec					@section('name') 
					{{-- expr --}} 
					@endsection

secy				@section('name') 
					{{-- expr --}} 
					@yield_section

secsim				@section('name', 'content')

hass				@hasSection('name') 
					{{-- expr --}} 
					@else 
					{{-- expr --}} 
					@endif

yl					@yield('section', 'default')

lsec				@section('name') 
					{{-- expr --}} 
					@show

par					@parent


			Components & Slots

Shortcut			Result

comp				@component('component', 'data') 
					{{-- expr --}} 
					@endcomponent

slot				@slot('slot') 
					{{-- expr --}} 
					@endslot

			Displaying data

Shortcut			Result

!!					{!! $var !!}
}}					{{ escaped output }}

Blade & JavaScript Frameworks

Shortcut			Result
@{{					@{{ javascript }}

verb				@verbatim 
					{{-- code --}} 
					@endverbatim

			Control Structures

Shortcut			Result
if					@if (condition) 
					{{-- expr --}} 
					@endif

ife					@if (condition) 
					{{-- expr --}} 
					@else 
					{{-- expr --}} 
					@endif

switch				@switch($i) 
   					@case(case1) 
       				First case... 
       				@break 

    				@default 
            		Default case... 
					@endswitch 

unless				@unless (condition) 
					{{-- expr --}} 
					@endunless
					for	@for ($i = 0; $i < …; $i++) 
					{{-- expr --}} 
					@endfor

foreach				@foreach($array as $element) 
					{{-- expr --}} 
					@endforeach

fore				@forelse ($array as $element) 
					{{-- expr --}} 
					@endforelse

while				@while (condition) 
					{{-- expr --}} 
					@endwhile

inc					@include('view.name', ['some' => 'data'])

incif				@includeIf('view.name', ['some' => 'data'])

each				@each ('item.view', $items, 'item', 'empty.view')

continue			@continue('condition')

break				@break('condition')
php					@php
					{{-- expr --}} 
					@endphp

empty				@empty (condition)
					{{-- expr --}} 
					@endempty

isset				@isset (condition)
					{{-- expr --}} 
					@endisset

			Stacks
Shortcut			Result

stack				@stack('name')

push				@push('name') 
					{{-- expr --}} 
					@endpush

		Authentication Shortcuts

Shortcut			Result
auth				@auth('name') 
					{{-- expr --}} 
					@endauth

guest				@guest('name') 
					{{-- expr --}} 
					@endguest

		Policies
See the Laravel Policies documentation.

Shortcut		Result

can				@can('policy', Model::class) 
				{{-- expr --}} 
				@endcan

cane			@can('policy', $model) 
				{{-- expr --}} 
				@else 				
				{{-- else expr --}} @endcan

cannot			@cannot('policy', Model::class) 
				{{-- expr --}} 
				@endcannot

cannote			@cannot('policy', $model) 
				{{-- expr --}} 
				@else 				
				{{-- else expr --}} @endcannot

		Miscellaneous

Shortcut		Result

route			{{ route('name') }}

asset			{{ asset('path') }}

url				{{ url('path') }}

choice			@choice('language.line', $number)

comment			{{-- comment --}}

inject			@inject('name', 'App\Services\ServiceName')

trans			{{ trans('language.line') }}

lang			@lang('language.line', ['variable => 'replacement'])

__				{{ __('language.line') }}

		Envoy snippets
Snippets for Laravel Envoy.

Shortcut		Result
serv			@servers(['web' => 'user@192.168.1.1'])

task			@task('foo') 
				command 
				@endtask

set				@setup 
				{{-- expr --}} 
				@endsetup

mac				@macro('deploy') 
				command 
				@endmacro

aft				@after
				hip 
				@endafter

hip				@hipchat('token', 'room', 'Envoy', "$task ran in the $env environment.")

sla				@slack('hook', 'channel', 'message')

story			@story('deploy') 
				command 
				@endstory


		Blade Wordpress Plugin
Snippets for Blade Wordpress Plugin.

Shortcut		Result
wpp				@wpposts
				{{-- expr --}}
				@wpempty
				{{-- empty expr --}}
				@wpend

wpq				@wpquery (['post_type' => 'post'])
				{{-- expr --}}
				@wpempty
				{{-- empty expr --}}
				@wpend

acf				@acfrepeater ('fieldname')
				{{-- expr --}}
				{{ get_sub_field('fieldname') }}
				@acfend