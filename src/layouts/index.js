import React from 'react'
import PropTypes from 'prop-types'
import Helmet from 'react-helmet'

import './index.scss';
import './home.scss';

class TemplateWrapper extends React.Component {
  componentDidMount = () => {
    const WebFont = require('webfontloader');
    WebFont.load({
      typekit: {
        id: 'vyo7fln'
      }
    });
  }

  render() {
    return (
      <div>
        <Helmet
          title="Alec Gorge: iOS, tvOS, TypeScript, Ruby, Postgres, Redis, node.js, C#, .NET Core and more!"
          meta={[
            { name: 'description', content: 'Alec Gorge is a senior engineer. iOS, Postgres, Ruby, C#' },
            { name: 'keywords', content: 'ios, objc, objective-c, swift, full-stack, ruby, postgres, c#, .net, .net core, asp.net, tvos' },
          ]}
        >
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        </Helmet>
        <div>
          {this.props.children()}
        </div>
      </div>
    );
  }
}

TemplateWrapper.propTypes = {
  children: PropTypes.func,
}


export default TemplateWrapper
