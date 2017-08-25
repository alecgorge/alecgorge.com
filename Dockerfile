FROM grahamc/jekyll

RUN gem install bundler

COPY Gemfile /src
COPY Gemfile.lock /src

RUN bundle install

COPY . /src

EXPOSE 5000

CMD ["serve", "--port", "5000"]
