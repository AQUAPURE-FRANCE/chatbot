export default function isElementExit(idElement){
    if (document.getElementById(idElement) == null) {
        return false;
    } else {
        return true;
    }
}
