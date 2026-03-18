const escapeStr = "` \\ / \" '";

const arr = [4, '2'];
Object.freeze(arr);

const obj = {
  str: "hello",
  num: 10,
  bool: true,
  undef: undefined,
  nested: {
    arr: [4, undefined, '2'],
    obj: {
      str: "text",
      num: 20,
      bool: false
    }
  }
};

Object.freeze(obj.nested.arr);
Object.freeze(obj.nested.obj);
Object.freeze(obj.nested);
Object.freeze(obj);
console.log(escapeStr);
console.log(arr);
console.log(obj);