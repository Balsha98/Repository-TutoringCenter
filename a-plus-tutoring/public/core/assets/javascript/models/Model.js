class Model {
    _state = {};

    get(key) {
        return this._state[key];
    }

    set(key, value) {
        this._state[key] = value;
    }
}

export default Model;
