function square(a) {
    return function (b) {
      return a * b;
    };
  }