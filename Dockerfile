FROM grahamc/jekyll

# port 4000
COPY . /src

CMD ["serve", "-H", "0.0.0.0"]
