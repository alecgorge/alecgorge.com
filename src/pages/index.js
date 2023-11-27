import React from 'react'

import { withPrefix } from 'gatsby-link'

import '../layouts/index.scss';
import '../layouts/home.scss';

class IndexPage extends React.Component {
  componentDidMount = () => {
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    document.getElementById('masthead').className += " bg-" + getRandomInt(0, 7);

    var _gaq = _gaq || [];
    _gaq.push(["_setAccount", "UA-27002013-1"]);
    _gaq.push(["_trackPageview"]);

    (function() {
        var a = document.createElement("script");
        a.type = "text/javascript";
        a.async = !0;
        a.src = ("https:" === document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
        var b = document.getElementsByTagName("script")[0];
        b.parentNode.insertBefore(a, b)
    })();
  }

  render() {
    return (
      <div id="masthead">

      <div id="wrapper">
        <div id="welcome">
          <h1>hello there.</h1>
          <h3>this is the personal site of <a href={withPrefix("/Alec Gorge Resume.pdf")}>Alec Gorge</a>.</h3>
          <p className="lead">
            I <a href="https://twitter.com/alecgorge">tweet</a> from time to time. I write <a href="https://github.com/alecgorge">open-source code on GitHub</a> and work at <a href="https://discord.com">Discord</a>.
            I enjoy building APIs &amp; iOS apps, cooking, photography, <a href="http://last.fm/user/alecgorge">music</a> &amp; live music.
            I built <a href="https://itunes.apple.com/us/app/relisten-formerly-listen-to/id715886886?mt=8">Relisten for iOS</a> and <a href="https://relisten.net">Relisten.net</a> to help put the vast live music library of archive.org, phish.in and panicstream.com in the palm of your hand.</p>
        </div>
      </div>
    </div>
    );
  }
}

export default IndexPage
