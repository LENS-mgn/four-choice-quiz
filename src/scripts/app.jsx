import React from 'react'
import ReactDOM from 'react-dom'
import App from './components/App'
import { createStore, applyMiddleware } from 'redux'
import { Provider } from 'react-redux'
import reducers from './reducers'
import { fetchData, init } from './actions';
import createLogger from 'redux-logger';
import thunk        from 'redux-thunk';
import {scrollQuestion} from "./middlewares/index";
const logger = createLogger();

const store = createStore(reducers, applyMiddleware( thunk, scrollQuestion, logger ) );

let container = document.querySelector('.four-choice-quiz-app' );
if ( container ) {
	let id = container.dataset.id;
	let currentid = container.dataset.currentid;

	store.dispatch(init(id,currentid));

	store.dispatch(fetchData(id)).then(() =>
		console.log(store.getState())
	).then( () => {
		"use strict";

		ReactDOM.render(
			<Provider store={store}>
				<App />
			</Provider>,
			container
		);

	})
}



