    @extends('layouts.default')
    @section('description', 'General information about server-side programming lanuage Java and libraries such as Swing')
    @section('title', 'Java Information')

    @section('content')
    <div class="static-content general-coding" >

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
       {{--  <h1 class="page-header">Java Code Samples</h1> --}}
       <span class="page-header uppercase-shadow mid-size-font">Java Code Samples</span>
        <hr />

        <img src="/images/logos/java.jpg" class="img-20"/>

        {{-- <span class="page-header uppercase-shadow">Java</span> --}}
         <span class="section-header mid-size-font">Java</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum, nisl ac convallis pulvinar, felis turpis iaculis risus, eget egestas mi magna nec dolor. Morbi consectetur convallis consequat. Duis aliquam imperdiet magna, eu condimentum nisl. Donec scelerisque tristique purus sed egestas. Sed rutrum enim a felis rhoncus, sed bibendum velit ultricies. Quisque vehicula consectetur est. Suspendisse potenti.</p>

            <p>Nunc egestas, justo in malesuada fermentum, nisl neque elementum dui, sit amet vestibulum est eros accumsan quam. Etiam ac nibh ut ipsum hendrerit vehicula ut a risus. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin leo tortor, venenatis sed mauris et, laoreet pretium massa. Curabitur luctus efficitur faucibus. Duis nec lacinia justo. </p>

            <p>Nunc egestas, justo in malesuada fermentum, nisl neque elementum dui, sit amet vestibulum est eros accumsan quam. Etiam ac nibh ut ipsum hendrerit vehicula ut a risus. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin leo tortor, venenatis sed mauris et, laoreet pretium massa. Curabitur luctus efficitur faucibus. Duis nec lacinia justo. </p>


            <p><a href="#">Choose An Applet You Made And Liked</a></p>
            <p><a href="#">Java Example 2</a></p>
            <p><a href="#">Java Example 3</a></p>
            {{-- additional projects will continue like this.  will be easy to advance into a model returning a request for files related to PHP samples --}}

        <hr />

   
    </div>
@stop