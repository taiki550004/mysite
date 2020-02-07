
    @if(Request::route()->getName()=='home')
    <a href="{{url('/about')}}"><button>about</button></a><br>
    <a href="{{url('/contact')}}"><button>contact</button></a>
    @endif
    @if(Request::route()->getName()=='about')
    <a href="{{url('/')}}"><button>home</button></a><br>
    <a href="{{url('/contact')}}"><button>contact</button></a>
    @endif
    @if(Request::route()->getName()=='contact')
    <a href="{{url('/')}}"><button>home</button></a><br>
    <a href="{{url('/about')}}"><button>about</button></a>
    @endif