import ActionType from "../constants/ActionType";
import $ from 'jquery';
export const scrollQuestion = store => next => action => {
	if( action.type == ActionType.NEXT_QUESTION ) {
		let questionPosition = $(".four-choice-quiz").offset().top;
		$('body,html').animate({scrollTop: questionPosition}, 300, 'swing');
	}
	return next(action);
}
