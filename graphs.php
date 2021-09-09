
<svg height="300" width="300" id="graph" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <!-- Стерлки и оси -->
    <line stroke="black" x1="0" x2="300" y1="150" y2="150"></line>
    <line stroke="black" x1="150" x2="150" y1="0" y2="300"></line>
    <polygon fill="black" points="150,0 144,15 156,15" stroke="black"></polygon>
    <polygon fill="black" points="300,150 285,156 285,144" stroke="black"></polygon>

    <!-- Деления -->
    <line stroke="black" x1="200" x2="200" y1="155" y2="145"></line>
    <line stroke="black" x1="250" x2="250" y1="155" y2="145"></line>

    <line stroke="black" x1="50" x2="50" y1="155" y2="145"></line>
    <line stroke="black" x1="100" x2="100" y1="155" y2="145"></line>

    <line stroke="black" x1="145" x2="155" y1="100" y2="100"></line>
    <line stroke="black" x1="145" x2="155" y1="50" y2="50"></line>

    <line stroke="black" x1="145" x2="155" y1="200" y2="200"></line>
    <line stroke="black" x1="145" x2="155" y1="250" y2="250"></line>

    <!-- Подписи к делениям и осям -->
    <text fill="black" x="195" y="140">R/2</text>
    <text fill="black" x="250" y="140">R</text>

    <text fill="black" x="40" y="140">-R</text>
    <text fill="black" x="85" y="140">-R/2</text>

    <text fill="black" x="160" y="55">R</text>
    <text fill="black" x="160" y="105">R/2</text>

    <text fill="black" x="160" y="204">-R/2</text>
    <text fill="black" x="160" y="255">-R</text>

    <text fill="black" x="285" y="140">X</text>
    <text fill="black" x="160" y="15">Y</text>

    <!-- (1 четверть) -->
    <path fill="blue"
          fill-opacity="0.3"
          stroke="blue"
          d="M 250 150 C 250 50, 175 50, 150 50 L 150 150 Z"></path>

    <!-- (2 четверть) -->
    <polygon fill="blue"
             fill-opacity="0.3"
             stroke="blue"
             points="150,100 150,150 100,150"></polygon>

    <!--  (4 четверть) -->
    <polygon fill="blue"
             fill-opacity="0.3"
             stroke="blue"
             points="150,250 250,250 250,150 150,150"></polygon>

</svg>