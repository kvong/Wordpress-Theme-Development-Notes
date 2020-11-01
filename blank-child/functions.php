<?php 
/**
 * Using Hooks in WordPress: 
 *  > ACTION - Add something to a hook
 *  > FILTER - Modify on a hook
*/

/*-------------------------*/
/* HOOK: ACTION */
/*-------------------------*/
function actionFunc( $arg ){
    echo $arg;
}
/**
 * add_action( {hook}, {call-back}, {priority=10}, {accepted_arguments=1} )
 *    - Link action to {hook} so that when called perform the call back.
 *   - {accepted_arguments} will perform the {call-back} on the number of argument provided on the do_action(). If {accepted_argument=1} and do_action provides 2 or more arguments, only the first one will be proccessed.
 * do_action( {hook}, {accepted_arguments}... ) 
 *    - Create the {hook} and pass the {accepted_arguments} for action.
 */
add_action( 'action_call', 'actionFunc', 10, 1 );
do_action( 'action_call', '<h1>Action called: Hello World</h1>');



/*-------------------------*/
/* HOOK: FILTER */
/*-------------------------*/
function filterFunc( $arg ){
    return "<h1>" . $arg . "</h1>";
}
function filterFunc1( $arg ){
    return "<span>" . $arg . "</span>";
}
/**
 * add_filter( {hook}, {call-back} , {priority=10}, {accepted_arguments=1})
 *   - Link a filter to a {hook} so that the {call-back} runs when the appropriate filter is called
 *   - Must return something.
 *   - {accepted_arguments} will perform the {call-back} on the number of argument provided on the apply_filters call. If {accepted_argument=1} and apply_filter provides 2 or more arguments, only the first one will be proccessed.
 * apply_filters( {hook}, {accepted_arguments} )
 *   - Applying filter to the argument.
 *   - Filters are applied on in order of priority, and order of declaration.
 *   - Applying FILTER to a ACTION will append the {accepted_arguments} of the FILTER.
 */
add_filter( 'filter_call', 'filterFunc' );
add_filter( 'filter_call', 'filterFunc1' , 9);
echo apply_filters( 'filter_call' , 'Filter called: Hello World');


/*-------------------------*/
/* ENQUEUING STYLES */
/*-------------------------*/

