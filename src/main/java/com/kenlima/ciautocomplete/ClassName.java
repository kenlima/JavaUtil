package com.kenlima.ciautocomplete;

/**
 * Created by jwlee on 2016. 2. 24..
 */
public class ClassName {
    private final String className;
    private final String parentClassName;

    public ClassName(String className, String parentClassName) {
        this.className = className.trim();
        this.parentClassName = parentClassName.trim();
    }

    public String getClassName() {
        return className;
    }


    public String getParentClassName() {
        return parentClassName;
    }

    @Override
    public String toString() {
        return "<" + className + ":" + parentClassName + ">";
    }
}
